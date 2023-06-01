import React, { useState } from 'react'
import Carousel from 'react-grid-carousel'
import { TbChevronDown } from 'react-icons/tb';

const ContentPrabencana = () => {
  const [show, setShow] = useState(true)
  const [show2, setShow2] = useState(true)
  const [show3, setShow3] = useState(true)
  return (
    <div>
      <div className='bg-gradient-to-t from-blue-900 to-cyan-600 text-white min-h-[600px]'>
        <div className='max-w-screen-lg p-4 mx-auto flex flex-col justify-center w-full h-fit'>
          <p className='text-5xl font-bold w-fit mt-10 ml-3'>Prabencana</p>
          <p className='text-xl font-bold inline border-b-4 border-orange-500 w-fit ml-3'>Meliputi Pencegahan, Kesiapsiagaan dan Mitigasi Bencana</p>
          <div className='pb-8 justify-center text-center'>
          </div>

          <div className='m-5 mb-5 text-2xl font-medium'>
            <button id='sub-pencegahan' className='animate-bounce' onClick={() => setShow(!show)}>
              <TbChevronDown className='inline mb-1 mr-2' />Pencegahan Bencana (Prevention)</button>
          </div>
          {
            show ?
              <div>
              <div id='pencegahan' className='m2-5 ml-10 transition duration-700 text-justify ease-in-out'>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <div className="m-5 mt-7 mb-5" >
              <Carousel cols={4} rows={1} gap={10} loop>
                <Carousel.Item>
                  <img width="100%" src="https://picsum.photos/800/600?random=1" />
                </Carousel.Item>
                <Carousel.Item>
                  <img width="100%" src="https://picsum.photos/800/600?random=2" />
                </Carousel.Item>
                <Carousel.Item>
                  <img width="100%" src="https://picsum.photos/800/600?random=3" />
                </Carousel.Item>
                <Carousel.Item>
                  <img width="100%" src="https://picsum.photos/800/600?random=3" />
                </Carousel.Item>
                <Carousel.Item>
                  <img width="100%" src="https://picsum.photos/800/600?random=3" />
                </Carousel.Item>
                <Carousel.Item>
                  <img width="100%" src="https://picsum.photos/800/600?random=2" />
                </Carousel.Item>
              </Carousel>
              </div>
              </div>: null
          }

          <div className='m-5 mt-10 mb-5 text-2xl font-medium'>
            <button id='sub-kesiapsiagaan' className='animate-bounce' onClick={() => setShow2(!show2)}>
              <TbChevronDown className='inline mb-1 mr-2' />Kesiapsiagaan (Awareness)
            </button>
          </div>
          {
            show2 ?
            <div>
            <div id='pencegahan' className='m2-5 ml-10 transition duration-700 text-justify ease-in-out'>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            <div className="m-5 mt-7 mb-5" >
            <Carousel cols={4} rows={1} gap={10} loop>
              <Carousel.Item>
                <img width="100%" src="https://picsum.photos/800/600?random=1" />
              </Carousel.Item>
              <Carousel.Item>
                <img width="100%" src="https://picsum.photos/800/600?random=2" />
              </Carousel.Item>
              <Carousel.Item>
                <img width="100%" src="https://picsum.photos/800/600?random=3" />
              </Carousel.Item>
              <Carousel.Item>
                <img width="100%" src="https://picsum.photos/800/600?random=3" />
              </Carousel.Item>
              <Carousel.Item>
                <img width="100%" src="https://picsum.photos/800/600?random=3" />
              </Carousel.Item>
              <Carousel.Item>
                <img width="100%" src="https://picsum.photos/800/600?random=2" />
              </Carousel.Item>
            </Carousel>
            </div>
            </div>: null
          }
          
          <div className='m-5 mt-10 mb-5 text-2xl font-medium'>
            <button id='mitigasi' className='animate-bounce' onClick={() => setShow3(!show3)}>
              <TbChevronDown className='inline mb-1 mr-2' />Mitigasi Bencana (Mitigation)
            </button>
          </div>
          {
            show3 ?
            <div>
            <div id='pencegahan' className='m2-5 ml-10 transition duration-700 text-justify ease-in-out'>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            <div className="m-5 mt-7 mb-5" >
            <Carousel cols={4} rows={1} gap={10} loop>
              <Carousel.Item>
                <img width="100%" src="https://picsum.photos/800/600?random=1" />
              </Carousel.Item>
              <Carousel.Item>
                <img width="100%" src="https://picsum.photos/800/600?random=2" />
              </Carousel.Item>
              <Carousel.Item>
                <img width="100%" src="https://picsum.photos/800/600?random=3" />
              </Carousel.Item>
              <Carousel.Item>
                <img width="100%" src="https://picsum.photos/800/600?random=3" />
              </Carousel.Item>
              <Carousel.Item>
                <img width="100%" src="https://picsum.photos/800/600?random=3" />
              </Carousel.Item>
              <Carousel.Item>
                <img width="100%" src="https://picsum.photos/800/600?random=2" />
              </Carousel.Item>
            </Carousel>
            </div>
            </div>: nul
          }
        
        </div>

      </div>
    </div>
  )
}

export default ContentPrabencana
