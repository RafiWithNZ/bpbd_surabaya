import React, { useState, useEffect } from 'react';
import Modal from 'react-modal';
import { FaTimes } from 'react-icons/fa';
import pb from '../../../public/build/assets/fardew/bg1.jpg';

const Infografis = () => {
  const [isModalOpen, setIsModalOpen] = useState(false);
  const [selectedImage, setSelectedImage] = useState('');

  const openModal = (image) => {
    setSelectedImage(image);
    setIsModalOpen(true);
  };

  const closeModal = () => {
    setSelectedImage('');
    setIsModalOpen(false);
  };

  useEffect(() => {
    // Disable scrolling when the modal is open
    if (isModalOpen) {
      document.documentElement.style.overflow = 'hidden';
      document.body.style.overflow = 'hidden';
    } else {
      document.documentElement.style.overflow = 'auto';
      document.body.style.overflow = 'auto';
    }

    // Cleanup function to reset the overflow property
    return () => {
      document.documentElement.style.overflow = 'auto';
      document.body.style.overflow = 'auto';
    };
  }, [isModalOpen]);

  return (
    <div className="flex justify-center bg-blue-900">
      <div className="flex items-center justify-center">
        <div className="max-w-sm rounded bg-orange-500 text-white overflow-hidden shadow-lg m-4 duration-200 hover:scale-105">
          <img
            src={pb}
            alt="Card 1"
            className="w-full cursor-pointer"
            onClick={() => openModal(pb)}
          />
          <div className="px-6 py-4">
            <div className="font-bold text-center text-xl mb-2">Prakiraan Cuaca</div>
          </div>
        </div>
      </div>
      <div className="flex items-center justify-center">
        <div className="max-w-sm rounded bg-orange-500 text-white overflow-hidden shadow-lg m-4 duration-200 hover:scale-105">
          <img
            src={pb}
            alt="Card 2"
            className="w-full cursor-pointer"
            onClick={() => openModal(pb)}
          />
          <div className="px-6 py-4">
            <div className="font-bold text-center text-xl mb-2 ">Infografis</div>
          </div>
        </div>
      </div>
      <Modal
        isOpen={isModalOpen}
        onRequestClose={closeModal}
        contentLabel="Modal"
        style={{
          content: {
            display: 'flex',
            alignItems: 'center',
            justifyContent: 'center',
            top: '50%',
            left: '50%',
            right: 'auto',
            bottom: 'auto',
            transform: 'translate(-50%, -50%)',
            maxWidth: '90%',
            maxHeight: '90%',
          },
          overlay: {
            backgroundColor: 'rgba(0, 0, 0, 0.7)',
          },
        }}
      >
        {selectedImage && (
          <img src={selectedImage} alt="Modal Image" className="max-h-full max-w-full" />
        )}
        <button
          className="absolute top-4 right-4 bg-red-600 text-white duration-200 hover:scale-150"
          onClick={closeModal}
        >
          <FaTimes size={50} />
        </button>
      </Modal>
    </div>
  );
};

export default Infografis;
