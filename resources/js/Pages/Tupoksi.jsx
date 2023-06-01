import React, { useState } from 'react'
import { BsArrowDownSquare, BsArrowDownSquareFill, BsArrowRight, BsArrowRightSquareFill } from 'react-icons/bs';
import { FaArrowCircleRight, FaArrowRight, FaYoutube } from 'react-icons/fa';

function Tupoksi() {
    const [show, setShow] = useState(false)
    const [show2, setShow2] = useState(false)
    const [show3, setShow3] = useState(false)
    const [show4, setShow4] = useState(false)



    return (
        <div>
            <div name="contact" className='w-full bg-gradient-to-t from-blue-900 to-cyan-600 text-white'>
                <div className='max-w-screen-lg p-4 mx-auto flex flex-col justify-center w-full h-fit'>
                    <div className='pb-8 justify-center text-center'>
                        <p className='text-4xl font-bold inline border-b-4 border-gray-400'>Tupoksi</p>
                    </div>
                    <div className="grid grid-cols-1 gap-4 justify-items-center items-center">
                        <button
                            className="bg-gradient-to-r from-red-500 to-orange-300 text-white font-bold py-2 px-4 rounded flex items-center transform transition duration-300 hover:scale-110 w-full"
                            onClick={() => setShow(!show)}
                        >
                            <BsArrowDownSquareFill size={20} className="mr-2" />
                            <p className="text-lg">Tugas Pokok BPBD</p>
                        </button>
                        {
                            show ?
                                <div id='kedaruratan' className='m2-5 ml-10 transition duration-700 ease-in-out'>
                                    Melaksanakan sebagian tugas Badan di bidang kedaruratan, logistik, rehabilitasi dan rekonstruksi meliputi menyusun dan melaksanakan rencana program dan petunjuk teknis, melaksanakan koordinasi dan kerja sama dengan lembaga dan instansi lain, melaksanakan pengawasan dan pengendalian, melaksanakan evaluasi dan pelaporan, dan melaksanakan tugas- tugas lain yang diberikan oleh Kepala Badan sesuai dengan tugas dan fungsinya.
                                </div> : null
                        }
                        <button
                            className="bg-gradient-to-r from-red-500 to-orange-300 text-white font-bold py-2 px-4 rounded flex items-center transform transition duration-300 hover:scale-110 w-full"
                            onClick={() => setShow2(!show2)}
                        >
                            <BsArrowDownSquareFill size={20} className="mr-2" />
                            <p className="text-lg">Tugas Pokok Sekretariat</p>
                        </button>
                        {
                            show2 ?
                                <div id='kedaruratan' className='m2-5 ml-10 transition duration-700 ease-in-out'>
                                    Melaksanakan sebagian tugas Badan di bidang kedaruratan, logistik, rehabilitasi dan rekonstruksi meliputi menyusun dan melaksanakan rencana program dan petunjuk teknis, melaksanakan koordinasi dan kerja sama dengan lembaga dan instansi lain, melaksanakan pengawasan dan pengendalian, melaksanakan evaluasi dan pelaporan, dan melaksanakan tugas- tugas lain yang diberikan oleh Kepala Badan sesuai dengan tugas dan fungsinya.
                                </div> : null
                        }
                        <button
                            className="bg-gradient-to-r from-red-500 to-orange-300 text-white font-bold py-2 px-4 rounded flex items-center transform transition duration-300 hover:scale-110 w-full"
                            onClick={() => setShow3(!show3)}
                        >
                            <BsArrowDownSquareFill size={20} className="mr-2" />
                            <p className="text-lg">Tugas Pokok Bidang Darlog RR</p>
                        </button>
                        {
                            show3 ?
                                <div id='kedaruratan' className='m2-5 ml-10 transition duration-700 ease-in-out'>
                                    <p className='mb-4'>
                                        Mempunyai tugas melaksanakan sebagian tugas Badan di bidang kedaruratan, logistik, rehabilitasi dan rekonstruksi meliputi menyusun dan melaksanakan rencana program dan petunjuk teknis, melaksanakan koordinasi dan kerja sama dengan lembaga dan instansi lain, melaksanakan pengawasan dan pengendalian, melaksanakan evaluasi dan pelaporan, dan melaksanakan tugas- tugas lain yang diberikan oleh Kepala Badan sesuai dengan tugas dan fungsinya.
                                    </p>
                                    <ul>
                                        <li>
                                            1. Melakukan segala usaha kegiatan untuk melindungi, menyelamatkan masyarakat terhadap bencana yang disebabkan oleh alam, non alam dan sosial.
                                        </li>
                                        <li>
                                            2. Mengiventaris, mengupdate terkait pemutakhiran dan melaksanakan perawatan barang barang / peralatan penanggulangan bencana yang akan digunakan untuk operasional penaggulangan bencana.
                                        </li>
                                        <li>
                                            3. Sebagai TRC penanggulangan bencana bertugas melaksanakan pengkajian awal saat terjadi bencana, membantu langkah awal tanggap darurat dan memberikan bantuan kepada korban bencana.
                                        </li>
                                        <li>
                                            4. Melaksanakan tugas di posko tanggap darurat dan berkoordinasi dengan seluruh sektor yang terlibat dalam penanganan penanggulangan bencana.
                                        </li>
                                        <li>
                                            5. Melakukan pola temu cepat serta melaporkan hasil tugas secara periodik yang meliputi laporan awal setelah tiba dilokasi kejadian / bencana, laporan berkala / perkembagan, dampak kerusakan dan laporan lengkap akhir penugasan.
                                        </li>
                                        <li>
                                            6. Melaksanakan tugas tertentu yang diperintahkan Keapala Badan Penanggulangan Bencana Daerah Kota Surabaya
                                        </li>
                                    </ul>
                                </div> : null
                        }
                        <button
                            className="bg-gradient-to-r from-red-500 to-orange-300 text-white font-bold py-2 px-4 rounded flex items-center transform transition duration-300 hover:scale-110 w-full"
                            onClick={() => setShow4(!show4)}
                        >
                            <BsArrowDownSquareFill size={20} className="mr-2" />
                            <p className="text-lg">Tugas Pokok Bidang Pencegahan & Kesiap Siagaan</p>
                        </button>
                        {
                            show4 ?
                                <div id='kedaruratan' className='m2-5 ml-10 transition duration-700 ease-in-out'>
                                    <p className='mb-4'>
                                        Mempunyai tugas melaksanakan sebagian tugas Badan di Bidang Pencegahan dan Kesiapsiagaan yang meliputi menyusun dan melaksanakan rencana program dan petunjuk teknis, melaksanakan koordinasi dan kerja sama dengan lembaga dan instansi lain, melaksanakan pengawasan dan pengendalian, melaksanakan evaluasi dan pelaporan, dan melaksanakan tugas-tugas lain yang diberikan oleh Kepala Badan sesuai dengan tugas dan fungsinya.
                                    </p>
                                    <ul>
                                        <li>
                                            1. Mengumpulkan bahan penyuluhan berdasarkan prosedur dan ketentuan yang berlaku untuk kelancaran pelaksanaan penyuluhan
                                        </li>
                                        <li>
                                            2. Mengolah bahan penyuluhan menjadi materi untuk disampaikan
                                        </li>
                                        <li>
                                            3. Melaksanakan penyampaian materi berdasarkan mater yang telah disusun agar pemahaman tentang aksi kesiapsiagaan dan pencegahan korban bencana meningkat

                                        </li>
                                        <li>
                                            4. Mengevaluasi hasil penyuluhan berdasarkan prosedur dan ketentuan yang berlaku untuk mengetahui tingkat pemahaman masyarakat tentang Kesiapsiagaan dan pencegahan korban bencana
                                        </li>
                                        <li>
                                            5. Melaporkan hasil pelaksanaan tugas dan kegiatan sesai dengan hasi keria sebagai bahan pertanggung jawaban
                                        </li>
                                        <li>
                                            6. Administrasi surat menyurat di Bidang Pencegahan dan Kesiap siagaan
                                        </li>
                                        <li>
                                            7. Membantu kegiatan Bidang Pencegahan dan Keslapslagaan
                                        </li>
                                        <li>
                                            8. Melaksanakan tugas lainnya yang diperintahkan oleh pimpinan, balk lisan maupun tertulis
                                        </li>
                                    </ul>
                                </div> : null
                        }
                    </div>
                </div>
            </div>
        </div>
    )
}

export default Tupoksi