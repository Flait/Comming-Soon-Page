async function fetchBtcPrice() {
    try {
        const response = await fetch('http://localhost:3000/btc-price');
        const data = await response.json();
        return data.price;
    } catch (error) {
        console.error('Error fetching BTC price:', error);
        return null;
    }
}

function formatPrice(price) {
    return price.toLocaleString('cs-CZ', {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2
    }).replace(/\s/g, ' ');
}

async function displayBtcPrice() {
    const btcPrice = await fetchBtcPrice();
    if (btcPrice !== null) {
        const formattedPrice = formatPrice(parseFloat(btcPrice));
        const priceElement = document.getElementById('price');
        priceElement.innerHTML = `Cena: <strong>${formattedPrice}</strong> BTC / USD`;
    } else {
        console.error('Could not display BTC price due to an error.');
    }
}

window.onload = displayBtcPrice;