import { db } from "@/config/db.js";
import Link from "next/link";
export default async function Page({ params }) {
  const { id } = await params;

  const [rows] = await db.execute('select * from doctors where id = ?',[id]);
  const post = rows[0];

  return (
    <div>
      {post ? (
        <>
          <p>{post.name}</p>
          <p>{post.email}</p>
          <p>{post.created_at.toString()}</p>
          <p>{post.updated_at.toString()}</p>
        
        </>
      ) : (
        <p>Post not found</p>
      )}
    </div>
  );
}