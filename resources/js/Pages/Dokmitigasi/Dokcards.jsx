import React from 'react'
import { FaDownload } from 'react-icons/fa'

const documents = [
    {
        id: 1,
        title: 'Document 1',
        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        file: 'https://www.orimi.com/pdf-test.pdf',
        image: 'https://placehold.co/600x400',
    },
    {
        id: 2,
        title: 'Document 2',
        description: 'Nulla facilisi. Sed auctor ultricies ante, a auctor lectus pretium id.',
        file: 'https://www.orimi.com/pdf-test.pdf',
        image: 'https://placehold.co/600x400',
    },
    {
        id: 3,
        title: 'Document 3',
        description: 'Nulla facilisi. Sed auctor ultricies ante, a auctor lectus pretium id.',
        file: 'https://www.orimi.com/pdf-test.pdf',
        image: 'https://placehold.co/600x400',
    },
    {
        id: 4,
        title: 'Document 4',
        description: 'Nulla facilisi. Sed auctor ultricies ante, a auctor lectus pretium id.',
        file: 'https://www.orimi.com/pdf-test.pdf',
        image: 'https://placehold.co/600x400',
    },
    // Add more documents as needed
];

function Dokcards() {
    return (
        <div className='bg-gradient-to-b from-cyan-600 to-blue-900'>
            <div className="container mx-auto p-4 text">
                <div className='pb-8 justify-center text-center'>
                    <p className='text-4xl text-white font-bold inline border-b-4 border-gray-400'>Download Dokumen Mitigasi</p>
                </div>
                <div className="flex justify-center items-center">
                <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    {documents.map((document) => (
                        <div key={document.id} className="max-w-sm bg-orange-500 rounded overflow-hidden shadow-lg hover:scale-105 duration-200">
                            <img src={document.image} alt="News" className="w-full" />
                            <div className="px-6 py-4">
                                <div className="font-bold text-xl mb-2">{document.title}</div>
                                <p className="text-gray-700 text-base">{document.description}</p>
                            </div>
                            <div className="flex justify-center py-2">
                                <a href={document.file} target="_blank" rel="noopener noreferrer" className="flex items-center bg-blue-500 text-white px-4 py-2 rounded-md transition-colors duration-200 hover:bg-blue-600">
                                    <FaDownload className="mr-2" />
                                    Download
                                </a>
                            </div>
                        </div>
                    ))}
                </div>
                </div>
            </div>
            );
        </div>
    )
}

export default Dokcards