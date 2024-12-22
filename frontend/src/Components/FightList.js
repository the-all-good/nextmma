import React, { useContext, useEffect } from 'react';
import { GetEndpoint, FightsContext } from '../Providers/FightsContext';
import FightListCell from '../Components/FightListCell';

function FightList(){
    const {allFights, setAllFights} = useContext(FightsContext);

    useEffect(() => {
        async function getData(){
            try {
                const data = await GetEndpoint('events');
                setAllFights(data);
            } catch (err) {
                
            }
        }

        getData();
    }, [setAllFights]);

    if(!allFights){
        return <div>Loading...</div>;
    }

    return (
        <div id="promotion-navigation" className="bg-secondary w-1/4 min-w-96 items-center text-center">
            {allFights.map((fight) => {
                return <FightListCell fightName={fight}/>
            })}
        </div>
    );
}

export default FightList;