import React, { useContext } from 'react';
import FightList from './FightList';
import TitleCard from './TitleCard';
import TimerBlock from './TimerBlock';
import { FightsContext } from '../Providers/FightsContext';

function HomePage() {
    const { highlightFight } = useContext(FightsContext);
    let mainEvent = null;
    if(highlightFight){
        mainEvent = highlightFight.find((fight) => fight.is_main === 1);
    }

    return (
        <div className="bg-primary h-screen flex flex-col">
            <div id="heading" className="w-full flex content-between justify-between p-4">
                <div className="flex flex-row text-lg ml-10 font-extrabold">
                    <p className="text-white">NEXT</p><p className="text-selected">MMA</p>
                </div>
            </div>
            <div id="body" className="flex flex-1 overflow-hidden">
                <div id="body-match" className="w-3/4 max-h-full flex flex-col overflow-auto">
                    {/* Title event */}
                    <div className="h-60 bg-green-950 flex-initial flex flex-col content-end justify-end">
                        <div className="flex justify-between p-4">
                            <div>
                            </div>
                            <div className="content-center text-white text-xl text-center">
                                TIME UNTIL MAIN CARD
                                {mainEvent ? <TimerBlock event={mainEvent}/> : ''}
                            </div>
                            <div>
                                {/* EMPTY SPACE */}
                            </div>
                        </div>
                    </div>
                    <TitleCard />
                </div>
                <div id="promotion-navigation" className="bg-gray-800 w-1/4 min-w-96 items-center text-center overflow-y-scroll overflow-x-hidden scroll-bar">
                    <FightList />
                </div>
            </div>
        </div>
    );
}

export default HomePage;
