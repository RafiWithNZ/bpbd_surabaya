import React from 'react'
import ReactPlayer from "react-player";
import video from "../../../public/build/assets/hero_video_544_1.mp4";

function Herovideo() {
  return (
    <div className="hidden md:flex">
        <ReactPlayer
                className=""
                url={video}
                width="100%"
                height="100%"
                muted={true}
                loop={true}
                playing={true}
            // controls={true}
            />

            
    </div>
  )
}

export default Herovideo