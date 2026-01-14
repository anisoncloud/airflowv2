import React from 'react'

export default function BlogPage({params}) {
    const {id} = params;
  return (
    <div>
        <h1>Blog Title</h1>
        <h1>This is the : {`${id}`}</h1>
    </div>
  )
}
