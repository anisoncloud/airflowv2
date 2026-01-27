import { prisma } from "@/lib/prisma";
import { NextResponse } from "next/server";

export async function POST(req: Request) {
  const body = await req.json();

  const post = await prisma.post.create({
    data: {
      title: body.title,
      slug: body.slug,
      content: body.content,
      thumbnail: body.thumbnail,
      featuredImg: body.featuredImg,
      authorId: body.authorId,
      categories: {
        create: body.categoryIds.map((id: number) => ({
          category: { connect: { id } },
        })),
      },
    },
  });

  return NextResponse.json(post);
}
