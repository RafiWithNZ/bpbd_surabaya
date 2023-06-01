
import Navbarcompo from '@/Components/Navbarcompo'
import Social from '@/Components/Social'
import { Head } from '@inertiajs/react'
import React from 'react'
import ContentPrabencana from './ContentPrabencana'

function Prabencana(props) {
  return (
    <div>
        <Head title={props.title} />
        <Navbarcompo></Navbarcompo>
        <Social></Social>
        <ContentPrabencana></ContentPrabencana>

    </div>
  )
}

export default Prabencana