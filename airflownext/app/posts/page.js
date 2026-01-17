
import React from 'react'
import getAllPosts from '../lib/getAllPosts'
import Link from 'next/link';

export default async function page() {
    const posts = await getAllPosts();
  return (
    <div>
        <h3>All Posts</h3>
        <div>
            {
                posts.map(
                    post=><li key={post.id}><Link href={`/posts/${post.id}`} >{post.title}</Link></li>
                )
            }
        </div>
    </div>
  )
}

