import Image from 'next/image'
import React from 'react'
import Preloader from "@/public/assets/images/preloader.gif";

export default function loading() {
  return (
    <div>
        <Image src={Preloader} priority/>
        Loading.....</div>
  )
}
