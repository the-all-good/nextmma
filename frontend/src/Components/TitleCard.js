import React, { useContext } from 'react';
import TitleCardCell from './TitleCardCell';
import { FightsContext } from '../Providers/FightsContext';

function TitleCard(){
    const {highlightFight} = useContext(FightsContext);

    if(!highlightFight){
        return <div> Loading... </div>
    }

    return (
        <div className="overflow-y-scroll scroll-bar px-8 flex-auto">
            Main card
            <table className="w-full">
                <tbody className="border-y-2 border-spacing">
                    {highlightFight.map((fight) => {
                        return fight.is_main ? <TitleCardCell fightInfo={fight}/> : '';
                    })}
                </tbody>
            </table>
            Prelim Card 
            <table className="w-full">
                <tbody>
                    {highlightFight.map((fight) => {
                        return !fight.is_main ? <TitleCardCell fightInfo={fight}/> : '';
                    })}
                </tbody>
            </table>
        </div>
    );
}

export default TitleCard;