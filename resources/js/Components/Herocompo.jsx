import React from "react";
// import ReactPlayer from "react-player";
// import video from "../../../public/build/assets/hero_video_544_1.mp4";
import { TbSquareRoundedChevronsDownFilled } from 'react-icons/tb'
import Herovideo from "./Herovideo";

function Herocompo() {
    return (
        <div className="relative hero-section">
            <Herovideo className="" />
            <div className="hidden md:flex" id="herotext">
                <div className="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center z-10 ">
                    <h2 className="text-white text-3xl text-shadow-md" style={{ textShadow: "0px 2px 4px rgba(0, 0, 0, 0.5)" }}>
                        Selamat Datang di Situs Resmi
                    </h2>
                    <div className="flex justify-center">
                        <h1 className="text-white text-5xl font-bold" style={{ textShadow: "0px 2px 4px rgba(0, 0, 0, 0.5)" }}>
                            BPBD Kota Surabaya
                            <div>
                                <TbSquareRoundedChevronsDownFilled className="inline-block animate-bounce mt-8" />
                            </div>
                        </h1>
                    </div>
                </div>
            </div>

        </div>
    );
}

export default Herocompo;