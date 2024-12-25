import React from 'react';

function TitleCardCellEmpty(){
    return (
        <table className="w-full">
            <tbody className="border-y-2 border-spacing">
                <tr className="text-gray-200  my-4 border-y-2 border-spacing">
                    <td>
                        <p className="font-extrabold font-mono">Category</p>
                    </td>
                    <td className="flex flex-col p-2 ">
                        <p className="justify-center text-white text-end">
                                Fighter 1
                        </p>
                        <p className="text-gray-500 text-end">
                            "? - ? - ?"
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
                            Fighter 2
                        </p>
                        <p className="text-gray-500 text-start">
                            "? - ? - ?"
                        </p>
                    </td>
                </tr> 
            </tbody>
        </table>
    );
}

export default TitleCardCellEmpty;