import React from 'react'
import wali from "../../../public/build/assets/pak_wali.png";
import wakil from "../../../public/build/assets/pak_wakil.png";

const Walikota = () => {
    return (
        <div>
            <div name="Walikota" className=' bg-gradient-to-t from-blue-900 to-cyan-600 text-white'>
                <div className='max-w-screen-lg p-4 mx-auto flex flex-col justify-center'>
                    <div className='pb-8 justify-center text-center'>
                        <p className='text-4xl font-bold inline border-b-4 border-gray-400'>Walikota dan Wakil Walikota</p>
                    </div>
                    <div id='visi' className='m-2'>
                        <div className='items-center text-center'>
                            <a className='text-2xl font-medium'><img src={wali} alt="Circle 2" className="h-56 inline-block mr-16" /></a>
                            <a className='my-4'><img src={wakil} alt="Circle 2" className="h-56 inline-block" /></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    )
}

export default Walikota