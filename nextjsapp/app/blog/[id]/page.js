import React from 'react'

export default async function BlogPage({params}) {
    const {id} = await params;
  return (
    <div>
        <h1>Blog Title</h1>
        <h1>This is the : {`${id}`}</h1>
    </div>
  )
}
