import Link from 'next/link'
import React from 'react'
import BlogButton from '../Component/button'
const myBlog = [
    {
        id:1,
        title:'Trump trying to capture the Iran',
        details: 'Trump trying to capture the Iran Trump trying to capture the IranTrump trying to capture the Iran'
    },
    {
        id:2,
        title:'Aiatullah khamani shows his power to protect the Iran',
        details: 'Aiatullah khamani shows his power to protect the Iran. Aiatullah khamani shows his power to protect the Iran'
      
    }
]
export default function blog() {
  return (
    <div>
        <h1 className='display-6'>Blog</h1>
        <hr/>
        <ul>
        {
            myBlog.map((item)=>{
                return <li key={item.id}><Link href={`/blog/${item.id}`}>{item.title}</Link></li>
            })
        }
        </ul>
        <BlogButton/>
    </div>
  )
}
