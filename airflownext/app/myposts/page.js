import { db } from "@/config/db.js";
import Link from "next/link";
export default async function page() {
    const [posts] = await db.execute('select * from posts');
    console.log(posts);
  return (
    <div>
        <ul className="list-group list-group-flush">
        {
        posts.map((item)=>{
            return <li className="list-group-item" key={item.id}><Link href={`/myposts/${item.id}`} >{item.post_title}</Link></li> 
        }) 
    }
    </ul>
    </div>
  )
}
