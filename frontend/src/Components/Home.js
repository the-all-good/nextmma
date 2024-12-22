import React from 'react';
import FightList from './FightList';
import TitleCard from './TitleCard';


function HomePage(){
    return (
        <div className="bg-primary">
            <div id="heading" className="w-full flex content-between justify-between">
                <div className="flex flex-row text-lg ml-10 font-extrabold">
                    <p className="text-white">NEXT</p><p className="text-selected">MMA</p>
                </div>
                <div className="text-white text-lg flex justify-between">

                </div>
            </div>
            <div id="body" className="w-full flex justify-between">
                <div id="body-match" className="w-3/4">
                    <div className="w-full">
                        {/* Title event */}
                        <div className="h-60 bg-green-950 flex flex-col content-end justify-end">
                            <div className="flex justify-between">
                                <div>
                                    <p className="text-white font-bold">Main card</p><p className="text-white">11:00 AM AEST</p>
                                </div>
                                <div>
                                    <div>
                                        TIME UNTIL MAIN CARD
                                    </div>
                                    <div>
                                        <div className="flex justify-evenly">
                                            <p className="text-yellow-300 text-3xl pl-2">01</p><p className="text-yellow-900 text-xl">DAYS</p>
                                            <p className="text-yellow-300 text-3xl pl-2">03</p><p className="text-yellow-900 text-xl">HOURS</p>
                                            <p className="text-yellow-300 text-3xl pl-2">35</p><p className="text-yellow-900 text-xl">MINS</p>
                                            <p className="text-yellow-300 text-3xl pl-2">51</p><p className="text-yellow-900 text-xl">SEC</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    {/* <!--EMPTY SPACE --> */}
                                </div>
                            </div>
                        </div>
                        <TitleCard />
                    </div>
                </div>
                <div id="promotion-navigation" className="bg-gray-800 w-1/4 min-w-96 items-center text-center">
                    <FightList/>
                </div>
            </div>
        </div>
    )
}

export default HomePage;