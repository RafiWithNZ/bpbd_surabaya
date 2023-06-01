import React from 'react'
import pb from '../../../public/build/assets/fardew/pb.png';
import td from '../../../public/build/assets/fardew/td.png';
import pab from '../../../public/build/assets/fardew/pab.png';

const cards = [
    {
        id: 1,
        title: 'Pra Bencana',
        src: pb,
        href: ''
    },
    {
        id: 2,
        title: 'Tanggap Darurat',
        src: td,
        href: ''
    },
    {
        id: 3,
        title: 'Pasca Bencana',
        src: pab,
        href: ''
    },
]

function Apaitu() {
    return (
        <div>
            <div name="Edukasi Bencana" className='w-full bg-gradient-to-b from-cyan-600 to-blue-900 text-white'>
                <div className='max-w-screen-lg p-4 mx-auto flex flex-col justify-center w-full h-fit'>
                    <div className='pb-8 justify-center text-center'>
                        <p className='text-4xl font-bold inline border-b-4 border-gray-400'>Apa itu BPBD?</p>
                    </div>
                    {/* START OF CARDS */}
                    <div className='grid sm:grid-cols-2 md:grid-cols-3 gap-8 px-12 sm:px-0'>
                        {cards.map(({ id, src, title, href }) => (
                            <div key={id} className='rounded-md shadow-md shadow-gray-600 overflow-hidden bg-orange-500 duration-200 hover:scale-110'>
                                <img src={src} alt="" className='mt-4 ml-7 duration-200 hover:scale-110 cursor-pointer' />
                                <div className='flex items-center justify-center font-bold'>
                                    <a href={href} target="_blank" rel="noopener noreferrer">
                                        <button className='px-6 py-3 m-4 duration-200 hover:scale-125'>{title}</button>
                                    </a>
                                </div>
                            </div>
                        ))}
                    </div>
                    {/* END OF CARDS */}
                </div>
            </div>
        </div>
    )
}

export default Apaitu