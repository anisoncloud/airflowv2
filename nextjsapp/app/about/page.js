import React from 'react'
import styles from "../page.module.css";
import Image from 'next/image'
import thumb from '@/public/mypic.png'

export default function page() {
  return (
    <div >
        <main>About</main>   
        <div className='w-25 p-3'>     
        <Image src={thumb} placeholder="blur" alt="Picture of the author"/>
      </div>
        </div>
  )
}
