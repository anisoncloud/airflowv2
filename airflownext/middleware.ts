import { getToken } from "next-auth/jwt";
import { NextResponse } from "next/server";

export async function middleware(req: any) {
  const token = await getToken({ req });

  if (!token || token.role !== "ADMIN") {
    return NextResponse.redirect(new URL("/login", req.url));
  }
}
