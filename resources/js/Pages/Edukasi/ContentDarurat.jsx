import React from 'react'
import Carousel from 'react-grid-carousel'

const ContentDarurat = () => {
    return (
        <div>
            <div name="contact" className='w-full h-screen bg-gradient-to-b from-blue-900 to-cyan-600 text-white'>
                <div className='max-w-screen-lg p-4 mx-auto flex flex-col justify-center w-full h-fit'>
                    <div className='pb-8 m-4'>
                        <p className='text-5xl font-bold inline border-b-4 border-gray-400'>Tanggap Darurat</p>
                    </div>
                    <div id='pasca' className='m-5 text-justify'>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam totam quod voluptate sunt velit ipsam nulla distinctio, voluptas unde eius saepe. Aliquam quis mollitia doloremque doloribus sed porro maiores commodi recusandae deleniti pariatur iure reiciendis, sit nostrum, saepe praesentium quasi! Nihil ea voluptatibus iusto rem cumque natus quo magnam laborum numquam reprehenderit accusamus facere praesentium quos vero, possimus veritatis soluta recusandae, atque quisquam, id tempora. Accusantium deserunt ex quasi corrupti, voluptatum voluptate? Sequi illo asperiores est delectus in dolore pariatur maiores voluptates accusantium. Minus quos facilis quasi est aspernatur. Excepturi eligendi dignissimos, earum suscipit sit culpa laborum laudantium perspiciatis ipsam?</p>
                    </div>
                    <div id='pasca' className='m-5 text-justify'>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam totam quod voluptate sunt velit ipsam nulla distinctio, voluptas unde eius saepe. Aliquam quis mollitia doloremque doloribus sed porro maiores commodi recusandae deleniti pariatur iure reiciendis, sit nostrum, saepe praesentium quasi! Nihil ea voluptatibus iusto rem cumque natus quo magnam laborum numquam reprehenderit accusamus facere praesentium quos vero, possimus veritatis soluta recusandae, atque quisquam, id tempora. Accusantium deserunt ex quasi corrupti, voluptatum voluptate? Sequi illo asperiores est delectus in dolore pariatur maiores voluptates accusantium. Minus quos facilis quasi est aspernatur. Excepturi eligendi dignissimos, earum suscipit sit culpa laborum laudantium perspiciatis ipsam?</p>
                    </div>
                    <div>
                      <Carousel cols={4} rows={1} gap={10}>
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
                    </Carousel>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default ContentDarurat