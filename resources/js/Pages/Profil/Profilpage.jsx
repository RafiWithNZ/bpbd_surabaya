import React from 'react'
import { Head } from '@inertiajs/react'
import Visimisi from '../Visimisi'
import Navbarcompo from '@/Components/Navbarcompo'
import Footer2 from '@/Components/Footer2'
import Tupoksi from '../Tupoksi'
import Struktur from '../Struktur'
import Social from '@/Components/Social'


function Profilpage(props) {
  return (
    <div>
        <Head title={props.title} />
        <Navbarcompo />
        <Social />
        <Visimisi />
        <Tupoksi />
        <Struktur />
        <Footer2 />
    </div>
  )
}

export default Profilpage