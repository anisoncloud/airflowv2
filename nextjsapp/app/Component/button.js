'use client';

export default function BlogButton() {
  return (
    <div>
        <button className='btn btn-primary'
        onClick={()=>{alert("Not Good")}}
        >Click Here for Details</button>
    </div>
  )
}
