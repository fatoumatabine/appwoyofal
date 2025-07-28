
-- Insertion de clients
INSERT INTO client (nom, prenom) VALUES ('Dupont', 'Jean');
INSERT INTO client (nom, prenom) VALUES ('Fall', 'Seydou');
INSERT INTO client (nom, prenom) VALUES ('Diop', 'Aissatou');
INSERT INTO client (nom, prenom) VALUES ('Sarr', 'Mamadou');
INSERT INTO client (nom, prenom) VALUES ('Ba', 'Fatou');

-- Insertion de tranches
INSERT INTO tranche (type, consommation, prixkw) VALUES ('domestique', 100, 50.0);
INSERT INTO tranche (type, consommation, prixkw) VALUES ('professionnel', 200, 80.0);
INSERT INTO tranche (type, consommation, prixkw) VALUES ('industriel', 300, 100.0);
INSERT INTO tranche (type, consommation, prixkw) VALUES ('agricole', 150, 60.0);
INSERT INTO tranche (type, consommation, prixkw) VALUES ('commercial', 250, 90.0);

-- Insertion de compteurs
INSERT INTO compteur (numerocompteur, client_id, tranche_id) VALUES ('CPT-001', 1, 1);
INSERT INTO compteur (numerocompteur, client_id, tranche_id) VALUES ('CPT-002', 2, 2);
INSERT INTO compteur (numerocompteur, client_id, tranche_id) VALUES ('CPT-003', 3, 3);
INSERT INTO compteur (numerocompteur, client_id, tranche_id) VALUES ('CPT-004', 4, 4);
INSERT INTO compteur (numerocompteur, client_id

-- Insertion d'achats
INSERT INTO achat (reference, coderecharge, nombrekilowatt, date_heure, prixkw, compteur_id) VALUES ('REF-001', 'RECH-001', 50, '2025-07-28 10:00:00', 50.0, 1);
INSERT INTO achat (reference, coderecharge, nombrekilowatt, date_heure, prixkw, compteur_id) VALUES ('REF-002', 'RECH-002', 100, '2025-07-28 11:00:00', 80.0, 2);
INSERT INTO achat (reference, coderecharge, nombrekilowatt, date_heure, prixkw, compteur_id) VALUES ('REF-003', 'RECH-003', 150, '2025-07-28 12:00:00', 100.0, 3);
INSERT INTO achat (reference, coderecharge, nombrekilowatt, date_heure, prixkw, compteur_id) VALUES ('REF-004', 'RECH-004', 200, '2025-07-28 13:00:00', 60.0, 4);
INSERT INTO achat (reference, coderecharge, nombrekilowatt, date_heure, prixkw, compteur_id) VALUES ('REF-005', 'RECH-005', 250, '2025-07-28 14:00:00', 90.0, 5);

-- Insertion de logs
INSERT INTO logging (date_heure, localisation, statut, coderecharge, nombrekilowatt) VALUES ('2025-07-28 12:00:00', 'Dakar', 'echec', 'RECH-001', 50);
INSERT INTO logging (date_heure, localisation, statut, coderecharge, nombrekilowatt) VALUES ('2025-07-28 13:00:00', 'Thies', 'statut', 'RECH-002', 100);
INSERT INTO logging (date_heure, localisation, statut, coderecharge, nombrekilowatt) VALUES ('2025-07-28 14:00:00', 'Saint-Louis', 'echec', 'RECH-003', 150);
INSERT INTO logging (date_heure, localisation, statut, coderecharge, nombrekilowatt) VALUES ('2025-07-28 15:00:00', 'Kaolack', 'statut', 'RECH-004', 200);
INSERT INTO logging (date_heure, localisation, statut, coderecharge, nombrekilowatt) VALUES ('2025-07-28 16:00:00', 'Ziguinchor', 'echec', 'RECH-005', 250);
