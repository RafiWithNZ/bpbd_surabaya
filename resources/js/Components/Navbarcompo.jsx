import React, { useState, useRef } from 'react';
import { FaBars, FaTimes } from 'react-icons/fa';
import { Link } from 'react-scroll';
import logo from "../../../public/build/assets/bpbd.png";
import { TbChevronDown } from 'react-icons/tb';

const Navbarcompo = () => {
    const [nav, setNav] = useState(false);
    const [showDropdown, setShowDropdown] = useState(false);
    const timeoutRef = useRef(null);

    const links = [
        {
            id: 1,
            icon: <TbChevronDown/> ,
            link: 'Profil',
            url: 'profil',
        },
        {
            id: 2,
            link: 'Layanan',
            url: 'layanan',
        },
        {
            id: 3,
            icon: <TbChevronDown/> ,
            link: 'Edukasi Bencana',
            sublinks: [
                {
                    id: 31,
                    link: 'Pra Bencana',
                    url: '/prabencana',
                },
                {
                    id: 32,
                    link: 'Pasca Bencana',
                    url: '/pascabencana',
                },
                {
                    id: 33,
                    link: 'Tanggap Darurat',
                    url: '/tanggapdarurat',
                },
            ],
        },
        {
            id: 4,
            link: 'Dokumen Mitigasi',
            url: 'dokmit',
        },
        {
            id: 5,
            link: 'Lokasi Pos BPBD',
            url: 'pos',
        },
    ];

    const handleMouseEnter = () => {
        clearTimeout(timeoutRef.current);
        setShowDropdown(true);
    };

    const handleMouseLeave = () => {
        timeoutRef.current = setTimeout(() => {
            setShowDropdown(false);
        }, 200); // Adjust the delay time here (in milliseconds)
    };

    return (
        <div className="flex justify-between items-center w-full h-20 px-4 text-white bg-sky-700">
            <div className='flex items-center'>
                <a href="/home">
                    <img src={logo} alt="logo_bpbd" className="h-16 sm:h-12 md:h-14" />
                </a>
                <h1 className='hidden lg:flex font-sigfont ml-2 text-2xl sm:text-xs md:text-xl font-extrabold'>
                    Badan Penanggulangan Bencana Daerah Surabaya
                </h1>
            </div>
            <ul className="hidden md:flex">
                {links.map(({ id, link, url, sublinks }) => {
                    const isInternalLink = url && url.startsWith('/');

                    return (
                        <li
                            key={id}
                            className="px-4 capitalize font-medium text-xl cursor-pointer text-white hover:scale-105 hover:text-orange-400 duration-200 relative"
                            onMouseEnter={sublinks && handleMouseEnter}
                            onMouseLeave={sublinks && handleMouseLeave}
                        >
                            {isInternalLink ? (
                                <Link to={url} smooth duration={500}>
                                    {link}
                                </Link>
                            ) : (
                                <a href={url} target="_blank" rel="noopener noreferrer">
                                    {link}
                                </a>
                            )}
                            {link === 'Edukasi Bencana' && showDropdown && (
                                <ul className="absolute left-0 w-40 bg-gray-800 text-gray-300 p-2 mt-2">
                                    {sublinks.map(({ id: subId, link: subLink, url: subUrl }) => (
                                        <li key={subId} className="hover:text-white text-lg">
                                            <a href={subUrl}>{subLink}</a>
                                        </li>
                                    ))}
                                </ul>
                            )}
                        </li>
                    );
                })}
            </ul>
            <div
                onClick={() => setNav(!nav)}
                className="cursor-pointer pr-4 z-10 text-gray-500 md:hidden"
            >
                {nav ? <FaTimes size={30} /> : <FaBars size={30} />}
            </div>
            {nav && (
                <ul className='flex flex-col justify-center items-center absolute top-0 left-0 w-full h-screen bg-gradient-to-b from-slate-800 to-sky-700 text-gray-500'>
                    {links.map(({ id, link, url }) => {
                        const isInternalLink = url && url.startsWith('/');

                        return (
                            <li key={id} className="px-4 cursor-pointer py-6 text-4xl">
                                {isInternalLink ? (
                                    <Link to={url} smooth duration={500}>
                                        {link}
                                    </Link>
                                ) : (
                                    <a href={url} target="_blank" rel="noopener noreferrer">
                                        {link}
                                    </a>
                                )}
                            </li>
                        );
                    })}
                </ul>
            )}
        </div>
    );
};

export default Navbarcompo;