import Herocompo from '@/Components/Herocompo'
import Navbarcompo from '@/Components/Navbarcompo'
import { Head } from '@inertiajs/react'
import React from 'react'
import Visimisi from './Visimisi'
import Apaitu from './Apaitu'
import Struktur from './Struktur'
import Tupoksi from './Tupoksi'
import Walikota from './Walikota'
import Infografis from './Infografis'
import News from './News'
import Social from '@/Components/Social'
import Temukan from './Temukan'
import Footer2 from '@/Components/Footer2'


function Homepage(props) {
  return (
    <div>
      <Head title={props.title} />
      <div className="hidden md:block">
        <Herocompo />
      </div>
      <Navbarcompo />
      <Social />
      <Walikota />
      <Visimisi />
      <Apaitu />
      <Struktur />
      <Tupoksi />
      <News />
      <Infografis />
      <Temukan />
      <Footer2 />
    </div>
  )
}

export default Homepage