import { FaYoutube } from 'react-icons/fa';

function Ytbutton({ link }) {
  return (
    <a href={link} target="_blank" rel="noopener noreferrer">
      <button className="bg-gradient-to-r from-pink-500 to-red-500 text-white font-bold py-2 px-4 rounded flex items-center transform transition duration-300 hover:scale-125">
        <FaYoutube size={20} className="mr-2" />
        <p className="text-lg">Kunjungi channel kami</p>
      </button>
    </a>
  );
}

export default Ytbutton;

// Cth penggunaan komponen di dalam page nya: <YoutubeButton link="https://www.youtube.com/channel/yourchannelid" />
