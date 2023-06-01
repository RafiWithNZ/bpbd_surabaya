import React from 'react'
import newsImage from '../../../public/build/assets/fardew/bg1.jpg';
import Newscard from '@/Components/Newscard';
import Carousel from 'react-grid-carousel';

const News = () => {
    return (
        <div>
            <div>
                <div name="contact" className='w-full bg-blue-900 text-white'>
                    <div className='max-w-screen-lg p-4 mx-auto flex flex-col justify-center w-full h-fit'>
                        <div className='pb-8 justify-center text-center'>
                            <p className='text-4xl font-bold inline border-b-4 border-gray-400 '>News Update</p>
                        </div>
                        <div>
                            <Carousel cols={3} rows={1} gap={4} loop>
                                <Carousel.Item>
                                    <Newscard
                                        title="Breaking News"
                                        image={newsImage}
                                        description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed lectus eget neque varius lacinia vel non ex."
                                    />
                                </Carousel.Item>
                                <Carousel.Item>
                                    <Newscard
                                        title="Breaking News"
                                        image={newsImage}
                                        description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed lectus eget neque varius lacinia vel non ex."
                                    />
                                </Carousel.Item>
                                <Carousel.Item>
                                    <Newscard
                                        title="Breaking News"
                                        image={newsImage}
                                        description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed lectus eget neque varius lacinia vel non ex."
                                    />
                                </Carousel.Item>
                                <Carousel.Item>
                                    <Newscard
                                        title="Breaking News"
                                        image={newsImage}
                                        description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed lectus eget neque varius lacinia vel non ex."
                                    />
                                </Carousel.Item>
                                <Carousel.Item>
                                    <Newscard
                                        title="Breaking News"
                                        image={newsImage}
                                        description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed lectus eget neque varius lacinia vel non ex."
                                    />
                                </Carousel.Item>
                                <Carousel.Item>
                                    <Newscard
                                        title="Breaking News"
                                        image={newsImage}
                                        description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed lectus eget neque varius lacinia vel non ex."
                                    />
                                </Carousel.Item>
                            </Carousel>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default News