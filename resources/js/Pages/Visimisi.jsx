import React from 'react'

const Visimisi = () => {
    return (
        <div>
            <div name="contact" className='w-full h-screen bg-gradient-to-b from-blue-900 to-cyan-600 text-white'>
                <div className='max-w-screen-lg p-4 mx-auto flex flex-col justify-center w-full h-fit'>
                    <div className='pb-8 justify-center text-center'>
                        <p className='text-4xl font-bold inline border-b-4 border-gray-400'>Visi dan Misi</p>
                    </div>
                    <div id='visi' className='m-2'>
                        <div className='mb-4'>
                            <p className='text-2xl font-medium border-b-2 border-gray-400'>Visi Kota Surabaya</p>
                            <p className='my-4'>Gotong royong menuju Surabaya kota dunia yang maju, humanis dan berkelanjutan</p>
                        </div>
                    </div>
                    <div id='misi' className='m-2'>
                        <div className='mb-4'>
                            <p className='text-2xl font-medium border-b-2 border-gray-400'>Misi Kota Surabaya</p>
                            <ul className='my-4'>
                                <li className='mb-4'>MISI 1: Mewujudkan perekonomian inklusif untuk meningkatkan kesejahteraan rakyat dan pembukaan lapangan kerja baru melalui penguatan kemandirian ekonomi lokal, kondusifitas iklim investasi, penguatan daya saing Surabaya sebagai pusat penghubung perdagangan dan jasa antar pulau serta internasional</li>
                                <li className='mb-4'>MISI 2: Membangun Sumber Daya Manusia (SDM) unggul berkarakter, sehat jasmani rohani, produktif, religius, berbudaya dalam bingkai kebhinnekaan melalui peningkatan akses dan kualitas pelayanan kesehatan, pendidikan serta kebutuhan dasar lainnya</li>
                                <li className='mb-4'>MISI 3: Memantapkan penataan ruang kota yang terintegrasi melalui ketersediaan infrastruktur dan utilitas kota yang modern berkelas dunia serta berkelanjutan</li>
                                <li className='mb-4'>MISI 4: Memantapkan transformasi birokrasi yang bersih, dinamis dan tangkas berbasis digital untuk meningkatkan kualitas pelayanan publik</li>
                                <li className='mb-4'>MISI 5: Menciptakan keteriban, keamananm krukunan sosial dan kepastian hukum yang berkeadilan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default Visimisi