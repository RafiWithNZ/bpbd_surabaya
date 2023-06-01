import Navbarcompo from '@/Components/Navbarcompo'
import Social from '@/Components/Social'
import React from 'react'
import { Head } from '@inertiajs/react'
import Dokcards from './Dokcards'

function Dokmit(props) {
  return (
    <div>
        <Head title={props.title} />
        <Navbarcompo />
        <Social />
        <Dokcards />
    </div>
  )
}

export default Dokmit