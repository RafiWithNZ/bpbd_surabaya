import React from 'react'
import { MapContainer, TileLayer,Marker,Popup } from 'react-leaflet'
import 'leaflet/dist/leaflet.css'


function Dokcards(props) {
    return (
        <div className='bg-gradient-to-b from-cyan-600 to-blue-900'>
            <div className="container mx-auto p-4 text">
                <div className='pb-8 justify-center ml-20'>
                    <p className='text-4xl text-white font-bold inline border-b-4 border-gray-400'>Pos Pantau</p>
                </div>
                <div className="flex justify-center items-center">
                <MapContainer center={[-7.2766337,112.7161124]} zoom={12} scrollWheelZoom={false}>
  <TileLayer
    attribution='&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
  />
  
   <Marker position={[-7.279358133714258, 112.78203032488811]}>

   <Popup>
      A pretty CSS3 popup. <br /> Easily customizable.
    </Popup>
   </Marker>
</MapContainer>
                </div>
            </div>
            <div className="container mx-auto p-4 text">
                <div className='pb-8 justify-center ml-20'>
                    <p className='text-4xl text-white font-bold inline border-b-4 border-gray-400'>Pos Terpadu</p>
                </div>
                <div className="flex justify-center items-center">
                <MapContainer center={[-7.2766337,112.7161124]} zoom={12} scrollWheelZoom={false}>
  <TileLayer
    attribution='&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
  />
</MapContainer>
                </div>
            </div>
        
        </div>
    )
}

export default Dokcards