import { db } from "@/config/db.js";
import Link from "next/link";
export default async function Page({ params }) {
  const { id } = params;

  const [rows] = await db.execute('SELECT * FROM posts WHERE id = ?',[id]);
  const post = rows[0];

  return (
    <div>
      {post ? (
        <p>{post.post_title}</p>
      ) : (
        <p>Post not found</p>
      )}
    </div>
  );
}