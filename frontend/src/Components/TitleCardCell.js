import React from 'react';

function TitleCardCell(props){
    console.log(props.fightInfo);
    return (
        <tr className="text-ts  my-4 border-y-2 border-spacing">
                <td>
                    <p classNameName="font-extrabold font-mono">{props.fightInfo.category}</p>
                </td>
                <td className="flex flex-col p-2 ">
                    <p className="justify-center text-white text-end">
                            { props.fightInfo.fighter_1_id.name }
                    </p>
                    <p className="text-gray-500 text-end">
                        <>
                        {props.fightInfo.fighter_1_id.record !== null ?
                        `${(!isNaN(props.fightInfo.fighter_1_id.record.win) ? props.fightInfo.fighter_1_id.record.win : '?')} - ${(!isNaN(props.fightInfo.fighter_1_id.record.loss) ? props.fightInfo.fighter_1_id.record.loss : '?')} - ${(!isNaN(props.fightInfo.fighter_1_id.record.draw) ? props.fightInfo.fighter_1_id.record.loss : '?')}` :
                        "? - ? - ?"}
                        </>
                    </p>
                </td>
                <td className="justify-center">
                    <div className="bg-white rounded-full w-10 h-10"></div>
                </td>
                <td className="justify-center p-2">
                    <div className="text-white rounded-full bg-gray-700 px-2 max-w-10 text-center">
                        VS
                    </div>
                </td>
                <td className="justify-center">
                    <div className="bg-white rounded-full w-10 h-10"></div>
                </td>
                <td className="flex flex-col p-2">
                    <p className="justify-center text-white text-start">
                            { props.fightInfo.fighter_2_id.name }
                    </p>
                    <p className="text-gray-500 text-start">
                    <>
                        {props.fightInfo.fighter_2_id.record !== null ?
                        `${(!isNaN(props.fightInfo.fighter_2_id.record.win) ? props.fightInfo.fighter_2_id.record.win : '?')} - ${(!isNaN(props.fightInfo.fighter_2_id.record.loss) ? props.fightInfo.fighter_2_id.record.loss : '?')} - ${(!isNaN(props.fightInfo.fighter_2_id.record.draw) ? props.fightInfo.fighter_2_id.record.loss : '?')}` :
                        "? - ? - ?"}
                        </>                    </p>
                </td>
            </tr> 
    );
}

export default TitleCardCell;