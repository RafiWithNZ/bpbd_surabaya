import React,{useState} from 'react'
import { TbArrowBigRightLineFilled } from 'react-icons/tb';
import {BsWhatsapp} from 'react-icons/bs';

const ContentLayanan = () => {
  const [show,setShow]=useState(true)
  const [show2,setShow2]=useState(true)
  const [show3,setShow3]=useState(true)
  return (
    <div>
        <div className='bg-gradient-to-t from-blue-900 to-cyan-600 text-white min-h-[600px]'>
        <div className='max-w-screen-lg p-4 mx-auto flex flex-col justify-center w-full h-fit'>
        <p className='text-5xl font-bold inline border-b-4 border-orange-500 w-fit mt-10 ml-3'>Layanan</p>
                    <div className='pb-8 justify-center text-center'>
                    </div>
                    
                    <div className='m-5 mb-5 text-2xl font-medium'>
                    <button id='sub-kedaruratan' className='animate-bounce' onClick={()=>setShow(!show)}>
                         <TbArrowBigRightLineFilled className='inline mb-1 mr-2'/>Kedaruratan</button>
                    </div>
                    {
                      show?
                      <div id='kedaruratan' className='m2-5 ml-10 transition duration-700 ease-in-out'>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                      </div>:null
                    }
                    
                    <div  className='m-5 mt-10 mb-5 text-2xl font-medium'>
                      <button id='sub-penilaian-resiko' className='animate-bounce' onClick={()=>setShow2(!show2)}>
                        <TbArrowBigRightLineFilled className='inline mb-1 mr-2'/>Penilaian Resiko
                      </button>
                    </div>
                    {
                      show2?
                      <div id='penilaian-resiko' className='m2-5 ml-10'>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                      </div>:null
                    }
                    
                    <div className='ml-5 mt-10 text-2xl font-medium'>
                      <button id='sub-perizinan' className='animate-bounce' onClick={()=>setShow3(!show3)}>
                        <TbArrowBigRightLineFilled className='inline mb-1 mr-2'/>Perizinan
                      </button>
                    </div>
                    {
                      show3?
                      <div>
                        <div id='sub-sumbangan' className='m-5 ml-10 mb-5 text-2xl font-medium'>Pengumpulan Sumbangan Bencana
                          </div>
                              <div id='sumbangan' className='m2-5 ml-20'>
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                              </div>
                          <div id='sub-magang' className='m-5 ml-10 mb-5 text-2xl font-medium'>Rekomendasi Magang / Penelitian Magang Di BPBD
                          </div>
                              <div id='magang' className='m-5 ml-20'>
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                              </div>
                              <button id='kontak' className='ml-20 mb-20 p-4 bg-green-600 hover:bg-green-500 rounded-full'>
                                <a href='https://wa.link/0g5a3q' target='_blank'><BsWhatsapp size={25} className='inline mb-1 mr-2'/>Hubungi Kami</a>
                              </button>
                      </div>:null
                    }            

                </div>
        
        </div>
    </div>
  )
}

export default ContentLayanan
