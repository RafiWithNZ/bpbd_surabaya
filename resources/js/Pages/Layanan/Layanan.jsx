
import Navbarcompo from '@/Components/Navbarcompo'
import Social from '@/Components/Social'
import { Head } from '@inertiajs/react'
import React from 'react'
import ContentLayanan from './ContentLayanan'
import Footer2 from '@/Components/Footer2'

function Layanan(props) {
  return (
    <div>
      <Head title={props.title} />
      <Navbarcompo></Navbarcompo>
      <Social></Social>
      <ContentLayanan></ContentLayanan>
      <Footer2 />
    </div>
  )
}

export default Layanan