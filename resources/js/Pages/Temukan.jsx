import Ytbutton from '@/Components/Ytbutton';
import React from 'react'
import { FaInstagram, FaTwitter, FaTiktok, FaYoutube, FaEnvelope, FaPhoneAlt, FaMapPin } from 'react-icons/fa';

const instagrams = [
    { id: 1, handle: '@BPBDSurabaya', link: 'https://www.instagram.com/BPBDSurabaya/' },
    { id: 2, handle: '@username2', link: 'https://www.instagram.com/username2/' },
    { id: 3, handle: '@username3', link: 'https://www.instagram.com/username3/' },
    { id: 4, handle: '@Call112Surabaya', link: 'https://www.instagram.com/Call112Surabaya/' },
    { id: 5, handle: '@username5', link: 'https://www.instagram.com/username5/' },
];

function Temukan() {
    return (
        <div>
            <div name="contact" className='w-full bg-gradient-to-b from-blue-900 to-cyan-600 text-white'>
                <div className='max-w-screen-lg p-4 mx-auto flex flex-col justify-center w-full h-fit'>
                    <div className='pb-8 justify-center text-center'>
                        <p className='text-4xl font-bold inline border-b-4 border-gray-400'>Temukan Kami Disini</p>
                    </div>
                    <div className='grid sm:grid-cols-2 md:grid-cols-3 gap-8 px-12 sm:px-0 mb-10'>
                        <div className='flex items-center justify-center'>
                            <FaInstagram size={50} />
                            <p className='pl-4'>@BPBDSurabaya</p>
                        </div>
                        <div className='flex items-center justify-center'>
                            <FaTwitter size={50} />
                            <p className='pl-4'>@BpbdSurabaya</p>
                        </div>
                        <div className='flex items-center justify-center'>
                            <FaTiktok size={50} />
                            <p className='pl-4'>@Officialbpbdsurabaya</p>
                        </div>
                        <div className='flex items-center justify-center'>
                            <FaInstagram size={50} />
                            <p className='pl-4'>@Call112Surabaya</p>
                        </div>
                        <div className='flex items-center justify-center'>
                            <FaTwitter size={50} />
                            <p className='pl-4'>@CommandSurabaya</p>
                        </div>
                        <div className='flex items-center justify-center'>
                            <FaTiktok size={50} />
                            <p className='pl-4'>@commandcenter112surabaya</p>
                        </div>
                    </div>
                    <div className='pb-8 justify-center text-center'>
                        <div className='flex items-center justify-center'>
                            {/* <FaYoutube size={50} className='mx-2' /> */}
                            <p className='text-3xl inline border-b-4 border-gray-400'>YouTube BPBD Kota Surabaya</p>
                        </div>
                        <div className='my-3 flex justify-center text-center'>
                            <Ytbutton link="https://www.youtube.com/@bpbdkotasurabaya" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default Temukan