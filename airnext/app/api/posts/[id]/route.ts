import { prisma } from '@/lib/prisma'
import { NextResponse } from 'next/server'


export async function GET(
req: Request,
{ params }: { params: { id: string } }
) {
const post = await prisma.post.findUnique({
where: { id: Number(params.id) }
})


return NextResponse.json(post)
}


export async function PUT(
req: Request,
{ params }: { params: { id: string } }
) {
const body = await req.json()


const post = await prisma.post.update({
where: { id: Number(params.id) },
data: {
title: body.title,
content: body.content
}
})


return NextResponse.json(post)
}


export async function DELETE(
req: Request,
{ params }: { params: { id: string } }
) {
await prisma.post.delete({
where: { id: Number(params.id) }
})


return NextResponse.json({ success: true })
}