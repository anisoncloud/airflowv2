import getPost from '@/app/lib/getPost';
import React from 'react'

export default async function page({params}) {
    const {id} = await params;
    const post = await getPost({id})
  return (
    <div>
        <h2>{post.title}</h2>
        <p>{post.body}</p>

    </div>
  )
}
