import React from 'react';

const Newscard = ({ title, image, description }) => {
  return (
    <div className="max-w-sm bg-orange-500 rounded overflow-hidden shadow-lg mx-auto hover:scale-105 duration-200">
      <img src={image} alt="News" className="w-full" />
      <div className="px-6 py-4">
        <div className="font-bold text-xl mb-2">{title}</div>
        <p className="text-gray-700 text-base">{description}</p>
      </div>
    </div>
  );
};

export default Newscard;
