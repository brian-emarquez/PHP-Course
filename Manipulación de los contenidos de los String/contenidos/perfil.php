
		<h1>Modificar tus datos</h1>
		<form id="datos">
			<div>
				<div><span>Tu Nombre </span><input type="text" /></div>
				<div><span>Tu Apellido </span><input type="text" /></div>
				<div><span>Tu Email </span><input type="email" /></div>
				<div class="profile">
					<span>Tu Avatar actual</span>
					<div><img src="uploads/avatar-thumbs/000_default.jpg" width="160" alt="Avatar actual" /></div>
					<div class="image_actions">
						<input type="file" id="new_image" />
						<label for="new_image">Usar imagen nueva</label>

						<input type="checkbox" id="del_image" /> 
						<label for="del_image">Eliminar actual</label>
					</div>
				</div>

				<div><span>Tu Nacimiento </span><input type="date" /></div>
				<div><span>Tu Género </span>
					 <div class="option_group">
						<label><input type="radio" /> Femenino</label>
						<label><input type="radio" /> Masculino</label>
						<label><input type="radio" /> No especificar</label>
					 </div>
				</div>
				<div><span>Tu Nacionalidad </span><select><option>Mexico</option><option>Uruguay</option><option>Colombia</option><option>Argentina</option></select></div>
				<div><span>Tu Clave </span><input type="password" /></div>
			</div>
			<div><input class="aligned" type="submit" value="Guardar cambios" /></div>
		</form>
