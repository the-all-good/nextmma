import React, { useContext } from 'react';
import TitleCardCellEmpty from './TitleCardCellEmpty';
import TitleCardEvent from './TitleCardEvent';
import { FightsContext } from '../Providers/FightsContext';

function TitleCard(){
    const {highlightFight} = useContext(FightsContext);

    if(!highlightFight){
        return <TitleCardCellEmpty/>
    }
    const mainEvent = highlightFight.find((fight) => fight.is_main === 1);
    const prelimEvent = highlightFight.find((fight) => fight.is_main === 0);
    const eventDate = new Date(mainEvent.timestamp * 1000);
    const prelimDate = prelimEvent ? new Date(prelimEvent.timestamp * 1000) : '';
    return (
        <div className="overflow-y-scroll scroll-bar px-8 flex-auto">
            <TitleCardEvent main={true} date={eventDate.toLocaleString()}/>
            {prelimEvent ? <TitleCardEvent main={false} date={prelimDate.toLocaleString()}/> : ''}
        </div>
    );
}

export default TitleCard;