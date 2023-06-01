
import Navbarcompo from '@/Components/Navbarcompo'
import Social from '@/Components/Social'
import { Head } from '@inertiajs/react'
import React from 'react'
import Contentpasca from './Contentpasca'

function Pascabencana(props) {
  return (
    <div>
        <Head title={props.title} />
        <Navbarcompo></Navbarcompo>
        <Social></Social>
        <Contentpasca></Contentpasca>

    </div>
  )
}

export default Pascabencana