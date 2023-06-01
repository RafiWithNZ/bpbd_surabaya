
import Navbarcompo from '@/Components/Navbarcompo'
import Social from '@/Components/Social'
import { Head } from '@inertiajs/react'
import React from 'react'
import Contentdarurat from './ContentDarurat'

function Tanggapdarurat(props) {
  return (
    <div>
        <Head title={props.title} />
        <Navbarcompo></Navbarcompo>
        <Social></Social>
        <Contentdarurat></Contentdarurat>

    </div>
  )
}

export default Tanggapdarurat