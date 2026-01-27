import cloudinary from "@/lib/cloudinary";
import { NextResponse } from "next/server";

export async function POST(req: Request) {
  const data = await req.formData();
  const file = data.get("file") as File;

  const buffer = Buffer.from(await file.arrayBuffer());

  const result: any = await new Promise((resolve, reject) => {
    cloudinary.uploader.upload_stream(
      { folder: "blog" },
      (error, result) => {
        if (error) reject(error);
        resolve(result);
      }
    ).end(buffer);
  });

  return NextResponse.json({ url: result.secure_url });
}
