const maxCards = 500; // Cantidad máxima de cartas a mostrar

// Realizar la solicitud al API de YGOPRODeck para obtener las cartas
fetch('https://db.ygoprodeck.com/api/v7/cardinfo.php')
  .then(response => response.json())
  .then(data => {
    const cardMenu = document.getElementById('cardMenu');

    // Obtener las primeras "maxCards" cartas
    const cardsToShow = data.data.slice(0, maxCards);

    // Mostrar las cartas en el menú
    cardsToShow.forEach(card => {
      const cardElement = document.createElement('div');
      cardElement.classList.add('card');

      // Mostrar el nombre y la imagen de la carta
      cardElement.innerHTML = `
        <div class="card-body">
          <h6 class="card-title">${card.name}</h6>
          <img src="${card.card_images[0].image_url}" alt="${card.name}">
        </div>
      `;

      // Agregar evento clic a la carta para abrir el modal con los detalles
      cardElement.addEventListener('click', () => {
        fillCardDetails(card);
        $('#cardModal').modal('show');
      });

      cardMenu.appendChild(cardElement);
    });
  })
  .catch(error => {
    console.log('Error al obtener las cartas:', error);
  });

// Rellenar los detalles de la carta en el modal
const fillCardDetails = (card) => {
  const modalTitle = document.getElementById('cardModalLabel');
  const cardName = document.getElementById('cardName');
  const cardLevel = document.getElementById('cardLevel');
  const cardAttack = document.getElementById('cardAttack');
  const cardDefense = document.getElementById('cardDefense');
  const cardType = document.getElementById('cardType');
  const cardDescription = document.getElementById('cardDescription');

  modalTitle.textContent = card.name;
  cardName.textContent = card.name;
  cardLevel.textContent = card.level;
  cardAttack.textContent = card.atk;
  cardDefense.textContent = card.def;
  cardType.textContent = card.race;
  cardDescription.textContent = card.desc;
};
