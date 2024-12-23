import React, { useContext } from 'react';
import { FightsContext, GetEndpoint } from '../Providers/FightsContext';

function FightListCell(props) {
    const {setHighlightFight, selectedFight, setSelectedFight} = useContext(FightsContext);
    const isSelected = selectedFight === props.fightName;

    const handleclick = async () => {
        try {
            const data = await (GetEndpoint(`events/${props.fightName}`));
            setHighlightFight(data);
        } catch (err) {
            console.log(err);
        }
    }

    return (
        <div 
            className={`w-full text-white text-l border-y-2 p-2 font-bold border-spacing hover:border-l-selected hover:border-l-4 ${
                isSelected ? 'border-l-selected border-l-4' : ''
            }`}
            onClick={() => {
                setSelectedFight(props.fightName);
                handleclick();
            }}
        >
            <div className="text-justify ml-4"> 
                {props.fightName}
            </div>
        </div>
    )
}

export default FightListCell;