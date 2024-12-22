import React, { useContext } from 'react';
import TitleCardCell from './TitleCardCell';
import { FightsContext } from '../Providers/FightsContext';

function TitleCard(){
    const {highlightFight} = useContext(FightsContext);

    if(!highlightFight){
        return <div> Loading... </div>
    }

    return (
        <div className="mx-10">
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