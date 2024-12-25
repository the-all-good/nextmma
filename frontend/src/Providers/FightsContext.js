import React, { createContext, useState } from 'react';

// Create a context
export const FightsContext = createContext(null);

// Get List of Fighters
export async function GetEndpoint($slug) {
  const url = `http://mmaapi.benalgie.com/api/${$slug}`;
      const response = fetch(url)
      .then(response => response.json())
      .catch(error => console.error(error));

      return response;
}


// Context Provider
export function FightsProvider({ children }) {
  const [selectedFight, setSelectedFight] = useState({ selectedFight: null });
  const [allFights, setAllFights] = useState();
  const [highlightFight, setHighlightFight] = useState();

  return (
    <FightsContext.Provider value={{ selectedFight, setSelectedFight, allFights, setAllFights, highlightFight, setHighlightFight}}>
      {children}
    </FightsContext.Provider>
  );
}

