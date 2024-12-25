import React, { useContext } from 'react';
import { FightsContext } from '../Providers/FightsContext';
import TitleCardCell from './TitleCardCell';
import TitleCardCellEmpty from './TitleCardCellEmpty';


function TitleCardEvent(props){
    const {highlightFight} = useContext(FightsContext);
    if(!highlightFight){
        return <TitleCardCellEmpty/>
    }

    return (
        <div>
            <div className="flex flex-row font-bold py-2">
                <p className="text-white text-xl">{props.main ? "Main" : "Prelim"} Card</p><p className="text-gray-300 pl-2">{props.date}</p>
            </div>
            <table className="w-full">
                <tbody className="border-y-2 border-spacing">
                    {highlightFight.map((fight) => {
                        return fight.is_main == props.main ? <TitleCardCell fightInfo={fight}/> : '';
                    })}
                </tbody>
            </table>
        </div>
    );
}

export default TitleCardEvent;