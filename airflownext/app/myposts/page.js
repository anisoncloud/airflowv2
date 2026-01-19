import { db } from "@/config/db.js";
import Link from "next/link";
export default async function page() {
    const [posts] = await db.execute('select * from doctors');
    console.log(posts);
  return (
    <div>
        <ul className="list-group list-group-flush">
        {
        posts.map((item)=>{
            return <li className="list-group-item" key={item.id}><Link href={`/myposts/${item.id}`} >{item.name}</Link></li> 
        }) 
    }
    </ul>
    </div>
  )
}
