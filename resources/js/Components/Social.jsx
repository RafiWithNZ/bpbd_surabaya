import React from 'react'
import { BsInstagram, BsTwitter, BsTelephoneFill } from 'react-icons/bs'
import { FaTiktok } from 'react-icons/fa'

const Social = () => {

    const links = [
        {
            id: 1,
            child: (
                <>
                    Instagram <BsInstagram size={30} />
                </>
            ),
            href: 'https://instagram.com/BPBDSurabaya',
            style: 'rounded-tr-md'
        },
        {
            id: 2,
            child: (
                <>
                    Twitter <BsTwitter size={30} />
                </>
            ),
            href: 'https://twitter.com/BpbdSurabaya',
        },
        {
            id: 3,
            child: (
                <>
                    Tiktok <FaTiktok size={30} />
                </>
            ),
            href: 'https://www.tiktok.com/@officialbpbdsurabaya',
            download: true,
        },
        {
            id: 4,
            child: (
                <>
                    Telepon <BsTelephoneFill size={30} />
                </>
            ),
            href: '',
            style: 'rounded-br-md'
        }
    ]

    return (
        <div className='hidden lg:flex flex-col top-[35%] left-0 fixed'>
            <ul>
                {links.map(({ id, child, href, style, download }) => (
                    <li key={id} className={`flex justify-between items-center w-40 h-14 px-4 ml-[-100px] hover:rounded-md duration-300 hover:ml-[-10px] bg-orange-500 ${style}`}>

                        <a
                            href={href}
                            className='flex justify-between items-center w-full text-white'
                            download={download}
                            target='_blank'
                            rel='noreferrer'
                        >
                            {child}
                        </a>
                    </li>
                ))}
            </ul>
        </div>
    )
}

export default Social